"use client"

import { useEffect, useState } from "react"
import { useRouter } from "next/navigation"
import { AdminDashboard } from "@/components/admin-dashboard"
import { LoginForm } from "@/components/login-form"

export default function AdminPage() {
  const [isAuthenticated, setIsAuthenticated] = useState<boolean | null>(null)
  const router = useRouter()

  useEffect(() => {
    const storedAuth = localStorage.getItem("mgrnz_auth")
    if (storedAuth) {
      try {
        const authData = JSON.parse(storedAuth)
        if (authData.authenticated && authData.email === "mike@mgrnz.com") {
          setIsAuthenticated(true)
        } else {
          setIsAuthenticated(false)
        }
      } catch {
        setIsAuthenticated(false)
      }
    } else {
      setIsAuthenticated(false)
    }
  }, [])

  const handleAuthSuccess = () => {
    setIsAuthenticated(true)
  }

  const handleLogout = () => {
    localStorage.removeItem("mgrnz_auth")
    localStorage.removeItem("user_email")
    setIsAuthenticated(false)
  }

  if (isAuthenticated === null) {
    return (
      <div className="min-h-screen bg-background flex items-center justify-center">
        <div className="text-center">
          <div className="animate-spin rounded-full h-12 w-12 border-b-2 border-primary mx-auto mb-4"></div>
          <p className="text-muted-foreground">Loading...</p>
        </div>
      </div>
    )
  }

  if (!isAuthenticated) {
    return <LoginForm onAuthSuccess={handleAuthSuccess} />
  }

  return <AdminDashboard onLogout={handleLogout} />
}
