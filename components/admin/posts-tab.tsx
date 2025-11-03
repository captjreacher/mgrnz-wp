"use client"

import { useState } from "react"
import { Button } from "@/components/ui/button"
import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card"
import { Table, TableBody, TableCell, TableHead, TableHeader, TableRow } from "@/components/ui/table"
import { Dialog, DialogContent, DialogHeader, DialogTitle, DialogTrigger } from "@/components/ui/dialog"
import { Input } from "@/components/ui/input"
import { Textarea } from "@/components/ui/textarea"
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from "@/components/ui/select"

interface Post {
  id: string
  title: string
  type: "blog" | "social"
  status: "draft" | "published" | "scheduled"
  createdAt: string
  scheduledAt?: string
}

const mockPosts: Post[] = [
  {
    id: "1",
    title: "Welcome to WordPress",
    type: "blog",
    status: "published",
    createdAt: "2025-01-01",
  },
  {
    id: "2",
    title: "New features announcement",
    type: "social",
    status: "scheduled",
    createdAt: "2025-01-02",
    scheduledAt: "2025-01-15",
  },
]

export function PostsTab() {
  const [posts, setPosts] = useState<Post[]>(mockPosts)
  const [openDialog, setOpenDialog] = useState<"blog" | "social" | null>(null)
  const [editingId, setEditingId] = useState<string | null>(null)
  const [formData, setFormData] = useState({ title: "", content: "", status: "draft", scheduledAt: "" })

  const handleCreatePost = (type: "blog" | "social") => {
    setOpenDialog(type)
    setEditingId(null)
    setFormData({ title: "", content: "", status: "draft", scheduledAt: "" })
  }

  const handleEditPost = (post: Post) => {
    setOpenDialog(post.type)
    setEditingId(post.id)
    setFormData({ title: post.title, content: "", status: post.status as any, scheduledAt: post.scheduledAt || "" })
  }

  const handleSavePost = () => {
    if (!formData.title) return

    if (editingId) {
      setPosts(
        posts.map((p) =>
          p.id === editingId
            ? { ...p, title: formData.title, status: formData.status as any, scheduledAt: formData.scheduledAt }
            : p,
        ),
      )
    } else {
      const newPost: Post = {
        id: String(Date.now()),
        title: formData.title,
        type: openDialog!,
        status: formData.status as any,
        createdAt: new Date().toISOString().split("T")[0],
        scheduledAt: formData.scheduledAt,
      }
      setPosts([...posts, newPost])
    }
    setOpenDialog(null)
    setFormData({ title: "", content: "", status: "draft", scheduledAt: "" })
  }

  const handleDeletePost = (id: string) => {
    setPosts(posts.filter((p) => p.id !== id))
  }

  return (
    <div className="space-y-4">
      <div className="flex gap-2 flex-wrap">
        <Dialog open={openDialog === "blog"} onOpenChange={(open) => !open && setOpenDialog(null)}>
          <DialogTrigger asChild>
            <Button onClick={() => handleCreatePost("blog")} className="flex gap-2">
              <span>➕</span>
              Create Blog Post
            </Button>
          </DialogTrigger>
          <DialogContent className="max-w-2xl">
            <DialogHeader>
              <DialogTitle>{editingId ? "Edit" : "Create"} Advanced Post (Blog)</DialogTitle>
            </DialogHeader>
            <div className="space-y-4">
              <div>
                <label className="text-sm font-medium text-foreground block mb-1">Title</label>
                <Input
                  placeholder="Post title"
                  value={formData.title}
                  onChange={(e) => setFormData({ ...formData, title: e.target.value })}
                />
              </div>
              <div>
                <label className="text-sm font-medium text-foreground block mb-1">Content</label>
                <Textarea
                  placeholder="Post content (supports markdown)"
                  value={formData.content}
                  onChange={(e) => setFormData({ ...formData, content: e.target.value })}
                  className="min-h-48"
                />
              </div>
              <div className="grid grid-cols-2 gap-4">
                <div>
                  <label className="text-sm font-medium text-foreground block mb-1">Status</label>
                  <Select value={formData.status} onValueChange={(val) => setFormData({ ...formData, status: val })}>
                    <SelectTrigger>
                      <SelectValue />
                    </SelectTrigger>
                    <SelectContent>
                      <SelectItem value="draft">Draft</SelectItem>
                      <SelectItem value="published">Published</SelectItem>
                      <SelectItem value="scheduled">Scheduled</SelectItem>
                    </SelectContent>
                  </Select>
                </div>
                {formData.status === "scheduled" && (
                  <div>
                    <label className="text-sm font-medium text-foreground block mb-1">Schedule Date</label>
                    <Input
                      type="datetime-local"
                      value={formData.scheduledAt}
                      onChange={(e) => setFormData({ ...formData, scheduledAt: e.target.value })}
                    />
                  </div>
                )}
              </div>
              <div className="flex gap-2 justify-end">
                <Button variant="outline" onClick={() => setOpenDialog(null)}>
                  Cancel
                </Button>
                <Button onClick={handleSavePost}>{editingId ? "Update" : "Create"} Post</Button>
              </div>
            </div>
          </DialogContent>
        </Dialog>

        <Dialog open={openDialog === "social"} onOpenChange={(open) => !open && setOpenDialog(null)}>
          <DialogTrigger asChild>
            <Button variant="outline" className="flex gap-2 bg-transparent">
              <span>➕</span>
              Create Social Post
            </Button>
          </DialogTrigger>
          <DialogContent className="max-w-2xl">
            <DialogHeader>
              <DialogTitle>{editingId ? "Edit" : "Create"} General Post (Social Media)</DialogTitle>
            </DialogHeader>
            <div className="space-y-4">
              <div>
                <label className="text-sm font-medium text-foreground block mb-1">Content</label>
                <Textarea
                  placeholder="Social media post content (280 chars recommended)"
                  value={formData.content}
                  onChange={(e) => setFormData({ ...formData, content: e.target.value })}
                  maxLength={280}
                  className="min-h-24"
                />
                <p className="text-xs text-muted-foreground mt-1">{formData.content.length}/280 characters</p>
              </div>
              <div className="grid grid-cols-2 gap-4">
                <div>
                  <label className="text-sm font-medium text-foreground block mb-1">Status</label>
                  <Select value={formData.status} onValueChange={(val) => setFormData({ ...formData, status: val })}>
                    <SelectTrigger>
                      <SelectValue />
                    </SelectTrigger>
                    <SelectContent>
                      <SelectItem value="draft">Draft</SelectItem>
                      <SelectItem value="published">Published</SelectItem>
                      <SelectItem value="scheduled">Scheduled</SelectItem>
                    </SelectContent>
                  </Select>
                </div>
                {formData.status === "scheduled" && (
                  <div>
                    <label className="text-sm font-medium text-foreground block mb-1">Schedule Date</label>
                    <Input
                      type="datetime-local"
                      value={formData.scheduledAt}
                      onChange={(e) => setFormData({ ...formData, scheduledAt: e.target.value })}
                    />
                  </div>
                )}
              </div>
              <div className="flex gap-2 justify-end">
                <Button variant="outline" onClick={() => setOpenDialog(null)}>
                  Cancel
                </Button>
                <Button onClick={handleSavePost}>{editingId ? "Update" : "Create"} Post</Button>
              </div>
            </div>
          </DialogContent>
        </Dialog>
      </div>

      <Card>
        <CardHeader>
          <CardTitle className="flex items-center justify-between">
            <span>All Posts ({posts.length})</span>
          </CardTitle>
        </CardHeader>
        <CardContent>
          {posts.length === 0 ? (
            <div className="text-center py-12">
              <p className="text-muted-foreground">No posts yet. Create your first post to get started.</p>
            </div>
          ) : (
            <div className="overflow-x-auto">
              <Table>
                <TableHeader>
                  <TableRow>
                    <TableHead>Title</TableHead>
                    <TableHead>Type</TableHead>
                    <TableHead>Status</TableHead>
                    <TableHead>Created</TableHead>
                    <TableHead className="text-right">Actions</TableHead>
                  </TableRow>
                </TableHeader>
                <TableBody>
                  {posts.map((post) => (
                    <TableRow key={post.id}>
                      <TableCell className="font-medium">{post.title}</TableCell>
                      <TableCell className="capitalize">
                        <span className="px-2 py-1 rounded text-xs bg-primary/10 text-primary">{post.type}</span>
                      </TableCell>
                      <TableCell>
                        <span
                          className={`px-2 py-1 rounded-full text-xs font-medium ${
                            post.status === "published"
                              ? "bg-green-500/10 text-green-600"
                              : post.status === "scheduled"
                                ? "bg-blue-500/10 text-blue-600"
                                : "bg-gray-500/10 text-gray-600"
                          }`}
                        >
                          {post.status}
                        </span>
                      </TableCell>
                      <TableCell className="text-sm">{post.createdAt}</TableCell>
                      <TableCell className="text-right">
                        <div className="flex gap-1 justify-end">
                          <Button
                            variant="ghost"
                            size="sm"
                            className="h-8 w-8 p-0"
                            onClick={() => handleEditPost(post)}
                            title="Edit post"
                          >
                            ✏️
                          </Button>
                          <Button
                            variant="ghost"
                            size="sm"
                            className="h-8 w-8 p-0 text-destructive hover:text-destructive"
                            onClick={() => handleDeletePost(post.id)}
                            title="Delete post"
                          >
                            🗑️
                          </Button>
                        </div>
                      </TableCell>
                    </TableRow>
                  ))}
                </TableBody>
              </Table>
            </div>
          )}
        </CardContent>
      </Card>
    </div>
  )
}
