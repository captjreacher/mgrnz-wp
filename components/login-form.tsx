"use client"

import type React from "react"

import { useState } from "react"
import { Button } from "@/components/ui/button"
import { Input } from "@/components/ui/input"
import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card"

interface LoginFormProps {
  onAuthSuccess: () => void
}

export function LoginForm({ onAuthSuccess }: LoginFormProps) {
  const [email, setEmail] = useState("")
  const [password, setPassword] = useState("")
  const [error, setError] = useState("")
  const [isLoading, setIsLoading] = useState(false)

  const handleLogin = async (e: React.FormEvent) => {
    e.preventDefault()
    setError("")
    setIsLoading(true)

    try {
      if (email === "mike@mgrnz.com" && password === "admin") {
        localStorage.setItem(
          "mgrnz_auth",
          JSON.stringify({
            authenticated: true,
            email: email,
            timestamp: new Date().getTime(),
          }),
        )
        localStorage.setItem("user_email", email)
        setEmail("")
        setPassword("")
        onAuthSuccess()
      } else {
        setError("Invalid email or password")
      }
    } catch (err) {
      setError(err instanceof Error ? err.message : "An error occurred")
    } finally {
      setIsLoading(false)
    }
  }

  return (
    <div className="min-h-screen bg-background flex items-center justify-center px-4">
      <Card className="w-full max-w-md bg-card border border-border">
        <CardHeader className="space-y-2">
          <CardTitle className="text-2xl text-foreground">Admin Login</CardTitle>
          <p className="text-sm text-muted-foreground">Sign in with your admin credentials</p>
        </CardHeader>
        <CardContent>
          <form onSubmit={handleLogin} className="space-y-4">
            {error && (
              <div className="p-3 bg-destructive/10 border border-destructive/20 rounded-lg flex gap-2">
                <span className="text-lg">⚠️</span>
                <div className="text-sm text-destructive">{error}</div>
              </div>
            )}

            <div className="space-y-2">
              <label htmlFor="email" className="text-sm font-medium text-foreground">
                Email
              </label>
              <Input
                id="email"
                type="email"
                placeholder="mike@mgrnz.com"
                value={email}
                onChange={(e) => setEmail(e.target.value)}
                className="bg-background border-border text-foreground placeholder:text-muted-foreground"
              />
            </div>

            <div className="space-y-2">
              <label htmlFor="password" className="text-sm font-medium text-foreground">
                Password
              </label>
              <Input
                id="password"
                type="password"
                placeholder="Enter password"
                value={password}
                onChange={(e) => setPassword(e.target.value)}
                className="bg-background border-border text-foreground placeholder:text-muted-foreground"
              />
            </div>

            <Button
              type="submit"
              disabled={isLoading}
              className="w-full bg-primary text-primary-foreground hover:bg-primary/90"
            >
              {isLoading ? "Signing in..." : "Sign In"}
            </Button>

            <p className="text-xs text-muted-foreground text-center">Demo credentials: mike@mgrnz.com / admin</p>
          </form>
        </CardContent>
      </Card>
    </div>
  )
}
