"use client"

import { useState } from "react"
import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card"
import { Button } from "@/components/ui/button"
import { Input } from "@/components/ui/input"
import { Textarea } from "@/components/ui/textarea"
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from "@/components/ui/select"
import { Table, TableBody, TableCell, TableHead, TableHeader, TableRow } from "@/components/ui/table"

interface ScheduledPost {
  id: string
  title: string
  type: "blog" | "social"
  scheduledFor: string
  status: "pending" | "published"
}

const mockScheduled: ScheduledPost[] = [
  {
    id: "1",
    title: "Monthly newsletter",
    type: "social",
    scheduledFor: "2025-01-15 09:00",
    status: "pending",
  },
]

export function SchedulingTab() {
  const [scheduled, setScheduled] = useState<ScheduledPost[]>(mockScheduled)
  const [formData, setFormData] = useState({ title: "", type: "blog" as const, content: "", datetime: "" })

  const handleSchedulePost = () => {
    if (formData.title && formData.datetime) {
      const newScheduled: ScheduledPost = {
        id: String(Date.now()),
        title: formData.title,
        type: formData.type,
        scheduledFor: formData.datetime,
        status: "pending",
      }
      setScheduled([...scheduled, newScheduled])
      setFormData({ title: "", type: "blog", content: "", datetime: "" })
    }
  }

  return (
    <div className="space-y-4">
      <Card>
        <CardHeader>
          <CardTitle>Schedule a Post</CardTitle>
        </CardHeader>
        <CardContent className="space-y-4">
          <div>
            <label className="text-sm font-medium text-foreground block mb-1">Post Type</label>
            <Select value={formData.type} onValueChange={(val) => setFormData({ ...formData, type: val as any })}>
              <SelectTrigger>
                <SelectValue />
              </SelectTrigger>
              <SelectContent>
                <SelectItem value="blog">Blog Post</SelectItem>
                <SelectItem value="social">Social Media</SelectItem>
              </SelectContent>
            </Select>
          </div>
          <div>
            <label className="text-sm font-medium text-foreground block mb-1">Title</label>
            <Input
              placeholder="Post title"
              value={formData.title}
              onChange={(e) => setFormData({ ...formData, title: e.target.value })}
            />
          </div>
          <div>
            <label className="text-sm font-medium text-foreground block mb-1">Scheduled Date & Time</label>
            <Input
              type="datetime-local"
              value={formData.datetime}
              onChange={(e) => setFormData({ ...formData, datetime: e.target.value })}
            />
          </div>
          <div>
            <label className="text-sm font-medium text-foreground block mb-1">Content</label>
            <Textarea
              placeholder="Post content"
              value={formData.content}
              onChange={(e) => setFormData({ ...formData, content: e.target.value })}
              className="min-h-32"
            />
          </div>
          <Button onClick={handleSchedulePost} className="w-full">
            Schedule Post
          </Button>
        </CardContent>
      </Card>

      <Card>
        <CardHeader>
          <CardTitle>Scheduled Posts ({scheduled.length})</CardTitle>
        </CardHeader>
        <CardContent>
          {scheduled.length === 0 ? (
            <p className="text-center text-muted-foreground py-8">No scheduled posts</p>
          ) : (
            <Table>
              <TableHeader>
                <TableRow>
                  <TableHead>Title</TableHead>
                  <TableHead>Type</TableHead>
                  <TableHead>Scheduled For</TableHead>
                  <TableHead>Status</TableHead>
                  <TableHead className="text-right">Action</TableHead>
                </TableRow>
              </TableHeader>
              <TableBody>
                {scheduled.map((post) => (
                  <TableRow key={post.id}>
                    <TableCell className="font-medium">{post.title}</TableCell>
                    <TableCell className="capitalize">{post.type}</TableCell>
                    <TableCell>{post.scheduledFor}</TableCell>
                    <TableCell>
                      <span className="px-2 py-1 rounded-full text-xs font-medium bg-blue-500/10 text-blue-600">
                        {post.status}
                      </span>
                    </TableCell>
                    <TableCell className="text-right">
                      <Button size="sm" variant="outline">
                        Cancel
                      </Button>
                    </TableCell>
                  </TableRow>
                ))}
              </TableBody>
            </Table>
          )}
        </CardContent>
      </Card>
    </div>
  )
}
