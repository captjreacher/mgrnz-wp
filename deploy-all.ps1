# deploy-all.ps1  (ASCII-only)
$ErrorActionPreference = "Stop"

# Determine repo root even when run from editor or terminal
$here = Split-Path -Parent $MyInvocation.MyCommand.Path
if (-not $here) { $here = $PWD.Path }
$repoRoot = $here
$funcRoot = Join-Path $repoRoot "supabase/functions"

if (-not (Test-Path $funcRoot)) {
  Write-Host "Functions folder not found at: $funcRoot" -ForegroundColor Red
  exit 1
}

Write-Host "== Deploying all Supabase Edge Functions ==" -ForegroundColor Cyan
Write-Host ("Using: {0}" -f $funcRoot) -ForegroundColor DarkGray

Set-Location $funcRoot
$functions = Get-ChildItem -Directory | Select-Object -ExpandProperty Name

if (-not $functions) {
  Write-Host "No function folders found in $funcRoot" -ForegroundColor Yellow
  exit 0
}

$results = @()
foreach ($fn in $functions) {
  $start = Get-Date
  Write-Host ("-> Deploying {0} ..." -f $fn) -ForegroundColor Yellow
  try {
    supabase functions deploy $fn | Out-Host
    $dur = (Get-Date) - $start
    Write-Host ("OK {0} in {1}s" -f $fn, [int]$dur.TotalSeconds) -ForegroundColor Green
    $results += [pscustomobject]@{ Function=$fn; Status='OK'; Seconds=[int]$dur.TotalSeconds }
  } catch {
    $dur = (Get-Date) - $start
    Write-Host ("FAIL {0}: {1}" -f $fn, $_.Exception.Message) -ForegroundColor Red
    $results += [pscustomobject]@{ Function=$fn; Status='FAIL'; Seconds=[int]$dur.TotalSeconds }
  }
}

Write-Host ""
Write-Host "Summary:" -ForegroundColor Cyan
$results | Format-Table -AutoSize

Write-Host ""
Write-Host "All deployments attempted. Check Supabase Dashboard for final status." -ForegroundColor Cyan
