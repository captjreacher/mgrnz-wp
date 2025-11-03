// vite.config.mjs
import { defineConfig } from 'vite'

const repo = process.env.GITHUB_REPOSITORY?.split('/')[1]
const isPages = process.env.GITHUB_PAGES === 'true'

// For project pages, base must be "/<repo-name>/"
const base = isPages && repo ? `/${repo}/` : '/'

export default defineConfig({
  base,
  build: { outDir: 'dist' },
})
