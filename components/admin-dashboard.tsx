"use client"
import { Button } from "@/components/ui/button"
import { Tabs, TabsContent, TabsList, TabsTrigger } from "@/components/ui/tabs"
import { PostsTab } from "./admin/posts-tab"
import { SchedulingTab } from "./admin/scheduling-tab"
import { IntegrationsTab } from "./admin/integrations-tab"
import { UsersTab } from "./admin/users-tab"
import { DiagnosticsTab } from "./admin/diagnostics-tab"

interface AdminDashboardProps {
  onLogout: () => void
}

export function AdminDashboard({ onLogout }: AdminDashboardProps) {
  const handleLogout = () => {
    localStorage.removeItem("mgrnz_auth")
    onLogout()
  }

  return (
    <div className="min-h-screen bg-background">
      {/* Admin Header */}
      <header className="border-b border-border sticky top-0 bg-background">
        <div className="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
          <h1 className="text-2xl font-bold text-foreground">Admin Console</h1>
          <Button variant="outline" size="sm" onClick={handleLogout} className="flex gap-2 items-center bg-transparent">
            ↪️ Logout
          </Button>
        </div>
      </header>

      {/* Admin Content */}
      <main className="max-w-7xl mx-auto px-4 py-8">
        <Tabs defaultValue="posts" className="space-y-4">
          <TabsList className="grid w-full grid-cols-5">
            <TabsTrigger value="posts">Posts</TabsTrigger>
            <TabsTrigger value="scheduling">Scheduling</TabsTrigger>
            <TabsTrigger value="integrations">Integrations</TabsTrigger>
            <TabsTrigger value="users">Users</TabsTrigger>
            <TabsTrigger value="diagnostics">Diagnostics</TabsTrigger>
          </TabsList>

          <TabsContent value="posts">
            <PostsTab />
          </TabsContent>

          <TabsContent value="scheduling">
            <SchedulingTab />
          </TabsContent>

          <TabsContent value="integrations">
            <IntegrationsTab />
          </TabsContent>

          <TabsContent value="users">
            <UsersTab />
          </TabsContent>

          <TabsContent value="diagnostics">
            <DiagnosticsTab />
          </TabsContent>
        </Tabs>
      </main>
    </div>
  )
}
