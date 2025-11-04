import { useEffect, useState } from 'react';
import { supabase } from './supabaseClient';

const ALLOWED_USERS = ['mike@mgrnz.com']; // add more if needed

export default function AuthGate({ children }) {
  const [state, setState] = useState({ loading: true, allowed: false });

  useEffect(() => {
    let sub;
    (async () => {
      const { data } = await supabase.auth.getUser();
      const user = data?.user ?? null;
      const allowed = !!user && ALLOWED_USERS.includes(user.email);
      setState({ loading: false, allowed });

      const onAuth = (_e, session) => {
        const u = session?.user ?? null;
        const ok = !!u && ALLOWED_USERS.includes(u.email);
        setState({ loading: false, allowed: ok });
      };
      sub = supabase.auth.onAuthStateChange(onAuth).data.subscription;
    })();

    return () => sub?.unsubscribe();
  }, []);

  if (state.loading) return <p style={{padding:16}}>Checking access…</p>;
  if (!state.allowed) {
    return (
      <div style={{padding:16}}>
        <p>Restricted area. Log in with your authorised email to continue.</p>
        <button
          onClick={async () => {
            const email = prompt('Email for magic link:');
            if (!email) return;
            const { error } = await supabase.auth.signInWithOtp({ email });
            if (error) alert(error.message);
            else alert('Check your email for the login link.');
          }}
          style={{background:'#ff4f00',color:'#fff',border:'none',padding:'0.6rem 0.9rem',borderRadius:999,fontWeight:700,cursor:'pointer'}}
        >
          Send Magic Link
        </button>
      </div>
    );
  }
  return children;
}
