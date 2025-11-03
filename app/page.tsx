"use client"

import type React from "react"

import { useState } from "react"
import { Button } from "@/components/ui/button"
import { Dialog, DialogContent, DialogHeader, DialogTitle } from "@/components/ui/dialog"
import Link from "next/link"
import Image from "next/image"

export default function HomePage() {
  const [showSubscribeModal, setShowSubscribeModal] = useState(false)
  const [email, setEmail] = useState("")
  const [subscribeMessage, setSubscribeMessage] = useState("")

  const handleSubscribe = (e: React.FormEvent) => {
    e.preventDefault()
    if (email) {
      setSubscribeMessage("Thank you for subscribing!")
      setEmail("")
      setTimeout(() => {
        setShowSubscribeModal(false)
        setSubscribeMessage("")
      }, 2000)
    }
  }

  return (
    <div className="min-h-screen bg-background">
      {/* Header */}
      <header className="border-b border-border sticky top-0 bg-background z-10">
        <div className="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
          <div className="flex items-center gap-8">
            <Image
              src="/BLOG-LOGO.webp"
              alt="MGRNZ Blog Logo"
              width={180}
              height={60}
              className="h-14 w-auto object-contain"
              priority
            />
            {/* Navigation Menu */}
            <nav className="hidden md:flex gap-6">
              <Link href="/" className="text-foreground hover:text-primary transition font-medium">
                Home
              </Link>
              <Link href="/blog" className="text-foreground hover:text-primary transition">
                Blog
              </Link>
              <Link href="/resources" className="text-foreground hover:text-primary transition">
                Resources
              </Link>
              <Link href="/about" className="text-foreground hover:text-primary transition">
                About
              </Link>
            </nav>
          </div>
          <Button variant="outline" size="sm">
            Menu
          </Button>
        </div>
      </header>

      {/* Main Content */}
      <main className="max-w-7xl mx-auto px-4 py-12">
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
          {/* Sidebar */}
          <aside className="md:col-span-1 order-2 md:order-1">
            <div className="bg-card rounded-lg overflow-hidden border border-border shadow-sm sticky top-24 space-y-4">
              <div className="w-full flex justify-center pt-6">
                <div className="rounded-full overflow-hidden border-4 border-primary">
                  <Image
                    src="/mgrnz-logo.webp"
                    alt="Mike G Robinson - MGRNZ"
                    width={280}
                    height={280}
                    className="w-64 h-64 object-cover"
                    priority
                  />
                </div>
              </div>
              {/* Sidebar Content */}
              <div className="px-6 pb-6 space-y-4">
                <div>
                  <h3 className="text-lg font-semibold text-card-foreground">Stay Updated</h3>
                  <p className="text-sm text-muted-foreground mt-2">
                    Get the latest insights on AI, technology, and digital innovation directly to your inbox.
                  </p>
                </div>
                <Button onClick={() => setShowSubscribeModal(true)} className="w-full font-medium">
                  Subscribe
                </Button>
                <p className="text-xs text-muted-foreground text-center">No spam, unsubscribe anytime</p>
              </div>
            </div>
          </aside>

          {/* Main Content Area */}
          <div className="md:col-span-2 order-1 md:order-2 space-y-8">
            <div className="rounded-lg overflow-hidden border border-border shadow-sm">
              <Image
                src="/home-banner.webp"
                alt="MGRNZ Home Banner - Stop thinking AI is magic"
                width={800}
                height={300}
                className="w-full h-auto object-cover"
                priority
              />
            </div>

            {/* Hero Section */}
            <section>
              <h1 className="text-4xl md:text-5xl font-bold text-foreground mb-4">Making AI Great Again</h1>
              <p className="text-lg md:text-xl text-muted-foreground">
                Insights, resources, and digital excellence. Stop thinking AI is magic—it's just technology.
              </p>
            </section>

            {/* Featured Posts Grid */}
            <section className="space-y-4">
              <h2 className="text-2xl font-semibold text-foreground">Latest Articles</h2>
              <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                {[
                  {
                    title: "Understanding AI Technology",
                    excerpt: "Demystify artificial intelligence and learn how it powers modern digital solutions.",
                    link: "/blog/ai-technology",
                  },
                  {
                    title: "Digital Innovation Guide",
                    excerpt: "Explore the latest trends and best practices in digital transformation.",
                    link: "/blog/digital-innovation",
                  },
                  {
                    title: "Building Better Platforms",
                    excerpt: "Learn strategies for creating scalable, user-focused digital platforms.",
                    link: "/blog/better-platforms",
                  },
                  {
                    title: "Technology Trends 2025",
                    excerpt: "Stay ahead with insights on emerging technologies and industry developments.",
                    link: "/blog/tech-trends-2025",
                  },
                ].map((post, idx) => (
                  <Link key={idx} href={post.link}>
                    <div className="p-6 bg-card border border-border rounded-lg hover:border-primary transition cursor-pointer h-full">
                      <h3 className="font-semibold text-card-foreground mb-2 hover:text-primary transition">
                        {post.title}
                      </h3>
                      <p className="text-sm text-muted-foreground">{post.excerpt}</p>
                      <Button variant="link" size="sm" className="mt-4 p-0 h-auto">
                        Read More →
                      </Button>
                    </div>
                  </Link>
                ))}
              </div>
            </section>

            {/* CTA Section */}
            <section className="bg-gradient-to-r from-primary/10 to-primary/5 border border-primary/20 rounded-lg p-8">
              <h2 className="text-2xl font-semibold text-foreground mb-2">Ready to dive in?</h2>
              <p className="text-muted-foreground mb-4">
                Subscribe to get exclusive content and updates delivered weekly.
              </p>
              <Button onClick={() => setShowSubscribeModal(true)}>Subscribe Now</Button>
            </section>
          </div>
        </div>
      </main>

      {/* Footer */}
      <footer className="border-t border-border mt-16 bg-card">
        <div className="max-w-7xl mx-auto px-4 py-12">
          <div className="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
            <div>
              <h4 className="font-semibold text-foreground mb-4">About MGRNZ</h4>
              <p className="text-sm text-muted-foreground">
                Digital content and resources for modern professionals interested in AI and technology innovation.
              </p>
            </div>
            <div>
              <h4 className="font-semibold text-foreground mb-4">Quick Links</h4>
              <ul className="space-y-2 text-sm text-muted-foreground">
                <li>
                  <Link href="/" className="hover:text-primary transition">
                    Home
                  </Link>
                </li>
                <li>
                  <Link href="/blog" className="hover:text-primary transition">
                    Blog
                  </Link>
                </li>
                <li>
                  <Link href="/resources" className="hover:text-primary transition">
                    Resources
                  </Link>
                </li>
                <li>
                  <Link href="/about" className="hover:text-primary transition">
                    About
                  </Link>
                </li>
              </ul>
            </div>
            <div>
              <h4 className="font-semibold text-foreground mb-4">Legal</h4>
              <ul className="space-y-2 text-sm text-muted-foreground">
                <li>
                  <a href="mailto:mike@mgrnz.com" className="hover:text-primary transition">
                    Contact
                  </a>
                </li>
                <li>
                  <Link href="/privacy" className="hover:text-primary transition">
                    Privacy
                  </Link>
                </li>
                <li>
                  <Link href="/terms" className="hover:text-primary transition">
                    Terms
                  </Link>
                </li>
              </ul>
            </div>
          </div>
          <div className="border-t border-border pt-8 flex items-center justify-between flex-col md:flex-row gap-4">
            <p className="text-sm text-muted-foreground">© 2025 MGRNZ. All rights reserved.</p>
            <Link href="/admin">
              <Button className="bg-primary hover:bg-primary/90">Settings / Admin</Button>
            </Link>
          </div>
        </div>
      </footer>

      {/* Subscribe Modal */}
      <Dialog open={showSubscribeModal} onOpenChange={setShowSubscribeModal}>
        <DialogContent className="max-w-md">
          <DialogHeader>
            <DialogTitle>Subscribe to Our Newsletter</DialogTitle>
          </DialogHeader>
          <form onSubmit={handleSubscribe} className="space-y-4">
            <p className="text-sm text-muted-foreground">
              Get the latest updates, exclusive content, and insights on AI and technology innovation.
            </p>

            {subscribeMessage ? (
              <div className="p-4 bg-green-500/10 border border-green-500/20 rounded-lg text-center text-sm text-green-600">
                {subscribeMessage}
              </div>
            ) : (
              <>
                {/* MailerLite subscription form placeholder - script integration point */}
                <div className="space-y-3">
                  <input
                    type="email"
                    placeholder="Enter your email"
                    value={email}
                    onChange={(e) => setEmail(e.target.value)}
                    required
                    className="w-full px-4 py-2 border border-border rounded-lg bg-background text-foreground placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-primary"
                  />
                  <Button type="submit" className="w-full">
                    Subscribe
                  </Button>
                </div>
                <p className="text-xs text-muted-foreground text-center">
                  We respect your privacy. Unsubscribe at any time.
                </p>
              </>
            )}
          </form>
        </DialogContent>
      </Dialog>
    </div>
  )
}
