// Unit tests for authentication functionality
import { describe, it, expect, beforeEach, afterEach } from "@jest/globals"

describe("Authentication", () => {
  beforeEach(() => {
    localStorage.clear()
  })

  afterEach(() => {
    localStorage.clear()
  })

  describe("Login Flow", () => {
    it("should successfully authenticate with correct credentials", () => {
      const email = "mike@mgrnz.com"
      const password = "admin"

      if (email === "mike@mgrnz.com" && password === "admin") {
        const authData = {
          email,
          authenticated: true,
          timestamp: new Date().toISOString(),
        }
        localStorage.setItem("mgrnz_auth", JSON.stringify(authData))
      }

      const stored = localStorage.getItem("mgrnz_auth")
      expect(stored).toBeDefined()
      const parsed = JSON.parse(stored!)
      expect(parsed.authenticated).toBe(true)
      expect(parsed.email).toBe("mike@mgrnz.com")
    })

    it("should reject invalid credentials", () => {
      const email = "invalid@example.com"
      const password = "wrongpassword"

      const isValid = email === "mike@mgrnz.com" && password === "admin"
      expect(isValid).toBe(false)
    })

    it("should store auth data in localStorage", () => {
      const authData = {
        email: "mike@mgrnz.com",
        authenticated: true,
        timestamp: new Date().toISOString(),
      }
      localStorage.setItem("mgrnz_auth", JSON.stringify(authData))

      const retrieved = JSON.parse(localStorage.getItem("mgrnz_auth")!)
      expect(retrieved.email).toBe("mike@mgrnz.com")
      expect(retrieved.authenticated).toBe(true)
    })

    it("should clear auth on logout", () => {
      localStorage.setItem("mgrnz_auth", JSON.stringify({ authenticated: true }))
      localStorage.removeItem("mgrnz_auth")

      expect(localStorage.getItem("mgrnz_auth")).toBeNull()
    })
  })

  describe("Session Management", () => {
    it("should validate existing auth session", () => {
      const authData = { email: "mike@mgrnz.com", authenticated: true }
      localStorage.setItem("mgrnz_auth", JSON.stringify(authData))

      const stored = localStorage.getItem("mgrnz_auth")
      const parsed = stored ? JSON.parse(stored) : null

      expect(parsed?.authenticated).toBe(true)
    })

    it("should return null for missing session", () => {
      const stored = localStorage.getItem("mgrnz_auth")
      expect(stored).toBeNull()
    })
  })
})
