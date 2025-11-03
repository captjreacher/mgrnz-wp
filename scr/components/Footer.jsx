export default function Footer() {
  return (
    <footer style={{background:'#000',borderTop:'1px solid #222',color:'#bbb',textAlign:'center',padding:'1.2rem 0',marginTop:'2rem'}}>
      © {new Date().getFullYear()} MGRNZ — Powered by <a href="https://maximisedai.com" style={{color:'#ff4f00',textDecoration:'none'}}>Maximised AI</a>
    </footer>
  );
}
