export interface User {
  id: string
  email: string
  role: "admin" | "editor" | "contributor"
  createdAt: string
}

export interface BlogPost {
  id: string
  title: string
  content: string
  excerpt?: string
  status: "draft" | "published" | "scheduled"
  scheduledAt?: string
  author: string
  createdAt: string
  updatedAt: string
  tags?: string[]
}

export interface SocialPost {
  id: string
  content: string
  platforms: string[]
  status: "draft" | "published" | "scheduled"
  scheduledAt?: string
  createdAt: string
  updatedAt: string
}

export interface IntegrationConfig {
  name: string
  enabled: boolean
  apiKey?: string
  settings?: Record<string, any>
}
