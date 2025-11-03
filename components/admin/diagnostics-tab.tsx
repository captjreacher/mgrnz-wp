"use client"

import { Card, CardContent } from "@/components/ui/card"

const diagnostics = [
  { name: "Database Connection", status: "healthy", message: "Connected to Supabase" },
  { name: "GitHub Integration", status: "healthy", message: "GitHub sync active" },
  { name: "MailerLite API", status: "healthy", message: "API responding normally" },
  { name: "Backup Status", status: "healthy", message: "Last backup: 2 hours ago" },
]

export function DiagnosticsTab() {
  return (
    <div className="space-y-4">
      {diagnostics.map((diagnostic) => (
        <Card key={diagnostic.name}>
          <CardContent className="pt-6">
            <div className="flex items-start justify-between">
              <div className="flex gap-3">
                <span className="text-2xl flex-shrink-0">{diagnostic.status === "healthy" ? "✅" : "⚠️"}</span>
                <div>
                  <h3 className="font-semibold text-foreground">{diagnostic.name}</h3>
                  <p className="text-sm text-muted-foreground mt-1">{diagnostic.message}</p>
                </div>
              </div>
              <span
                className={`px-3 py-1 rounded-full text-xs font-medium ${
                  diagnostic.status === "healthy"
                    ? "bg-green-500/10 text-green-600"
                    : "bg-yellow-500/10 text-yellow-600"
                }`}
              >
                {diagnostic.status === "healthy" ? "Healthy" : "Warning"}
              </span>
            </div>
          </CardContent>
        </Card>
      ))}
    </div>
  )
}
