function Write-Progress-Header {
    param([string]$Title, [int]$Current, [int]$Total)
    Write-Host "Step $Current of $Total: $Title"
}

Write-Progress-Header -Title "Test" -Current 1 -Total 3
