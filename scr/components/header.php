export default function Header() {
  return (
    <header style={{background:'#000',borderBottom:'1px solid #222',color:'#fff'}}>
      <div style={{maxWidth:1100,margin:'0 auto',padding:'0.8rem 1rem',
                   display:'flex',alignItems:'center',justifyContent:'space-between'}}>
        <a href="/" style={{color:'#fff',textDecoration:'none',fontWeight:700}}>MGRNZ</a>
        <nav>
          <a href="/" style={{color:'#fff',textDecoration:'none',marginLeft:16}}>Home</a>
          <a href="/#posts" style={{color:'#fff',textDecoration:'none',marginLeft:16}}>Posts</a>
          <a href="/#subscribe" style={{color:'#fff',textDecoration:'none',marginLeft:16}}>Subscribe</a>
        </nav>
      </div>
    </header>
  );
}
