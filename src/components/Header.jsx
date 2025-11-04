export default function Header() {
  return (
    <header style={{background:'#000',borderBottom:'1px solid #222',color:'#fff'}}>
      <div style={{maxWidth:1100,margin:'0 auto',padding:'0.8rem 1rem',
                   display:'flex',alignItems:'center',justifyContent:'space-between'}}>
        <a href="/" style={{color:'#fff',textDecoration:'none',fontWeight:700}}>MGRNZ</a>
        <nav>
export default function Header() {
  return (
    <header style={{background:'#000',borderBottom:'1px solid #222',color:'#fff'}}>
      <div style={{maxWidth:1100,margin:'0 auto',padding:'0.8rem 1rem',
                   display:'flex',alignItems:'center',justifyContent:'space-between'}}>
        <a href="/" style={{color:'#fff',textDecoration:'none',fontWeight:700}}>MGRNZ</a>
        <nav style={{display:'flex',gap:'1rem'}}>
          <a href="/" style={link}>Home</a>
          <a href="/blog" style={link}>Blog</a>
          <a href="/#subscribe" style={link}>Subscribe</a>
        </nav>
      </div>
    </header>
  );
}

const link = { color:'#fff', textDecoration:'none' };
