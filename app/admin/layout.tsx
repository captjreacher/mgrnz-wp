import type React from "react"
import type { Metadata } from "next"

export const metadata: Metadata = {
  title: "Admin Console - mgrnz",
  description: "Admin dashboard for managing posts and content",
}

export default function AdminLayout({
  children,
}: {
  children: React.ReactNode
}) {
  return <>{children}</>
}
