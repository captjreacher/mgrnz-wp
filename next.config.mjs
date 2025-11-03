/** @type {import('next').NextConfig} */
const nextConfig = {
  // eslint config via .eslintrc.* instead of here
  images: {
    remotePatterns: [
      { protocol: 'https', hostname: 'example.com' },
      // add more hosts as needed
    ],
  },
}
export default nextConfig

