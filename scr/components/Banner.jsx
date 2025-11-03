import { useEffect, useState } from 'react';
import { supabase } from './lib/supabaseClient';
import Header from './components/Header';
import Footer from './components/Footer';
import Banner from './components/Banner';

export default function App() {
  const [user, setUser] = useState(null);

  useEffect(() => {
    supabase.auth.getUser().then(({ data }) => setUser(data?.user ?? null));
    const { data: sub } = supabase.auth.onAuthStateChange((_e, session) => {
      setUser(session?.user ?? null);
    });
    return () => sub?.subscription?.unsubscribe();
  }, []);

  async function login() {
    const email = prompt('Enter your email for magic link login:');
    if (!email) return;
    const { error } = await supabase.auth.signInWithOtp({ email });
    if (error) alert(error.message);
    else alert('Check your email for the login link.');
  }

  async function logout() {
    await supabase.auth.signOut();
  }

  return (
    <div style={{background:'#000',minHeight:'100vh',color:'#e7e7e7'}}>
      <Header />

      <main style={{maxWidth:1100,margin:'2rem auto',padding:'0 1rem'}}>
        <h1 style={{margin:'0 0 .4rem'}}>Building Better with AI</h1>
        <p style={{color:'#cfcfcf',margin:'0 0 1rem'}}>I’m Mike G Robinson — we build automations, workflows, and AI tools.</p>

        <Banner src="/images/hero.jpg" />

        <section id="auth" style={{margin:'1.5rem 0'}}>
          {user ? (
            <div>
              <p>Signed in as <strong>{user.email}</strong></p>
              <button onClick={logout} style={btn}>Log out</button>
            </div>
          ) : (
            <button onClick={login} style={btn}>Log in (Magic Link)</button>
          )}
        </section>

        <section id="subscribe" style={{margin:'2rem 0'}}>
          <h2>Subscribe</h2>
          <div id="ml-form" style={{background:'#0b0b0b',border:'1px solid #1f1f1f',borderRadius:16,padding:'1rem'}}>
            {/* MailerLite universal script (paste your id if you want this live) */}
            <p style={{color:'#cfcfcf'}}>Hook your MailerLite form here.</p>
          </div>
        </section>

        <section id="posts" style={{margin:'2rem 0'}}>
          <h2>Recent Posts</h2>
          <p style={{color:'#cfcfcf'}}>If you need WordPress content, fetch from WP REST API client-side here.</p>
        </section>
      </main>

      <Footer />
    </div>
  );
}

const btn = {
  background:'#ff4f00',
  color:'#fff',
  border:'none',
  padding:'0.6rem 0.9rem',
  borderRadius:999,
  cursor:'pointer',
  fontWeight:700
};
