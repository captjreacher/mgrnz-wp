import { useEffect, useState } from 'react';
import { supabase } from '../lib/supabaseClient';
import AuthGate from '../lib/authGate';

export default function Admin() {
  return (
    <AuthGate>
      <AdminInner />
    </AuthGate>
  );
}

function AdminInner() {
  const [rows, setRows] = useState([]);

  useEffect(() => {
    (async () => {
      const { data, error } = await supabase
        .from('newsletter_subscribers')
        .select('*')
        .order('subscribed_at', { ascending: false })
        .limit(100);
      if (error) console.error(error);
      setRows(data ?? []);
    })();
  }, []);

  return (
    <div style={{maxWidth:1100,margin:'2rem auto',padding:'0 1rem'}}>
      <h1>Admin Console</h1>
      <p>Latest subscribers from MailerLite → Supabase</p>
      <table style={{width:'100%',borderCollapse:'collapse'}}>
        <thead>
          <tr><th align="left">Email</th><th align="left">Status</th><th align="left">Source</th><th align="left">Subscribed</th></tr>
        </thead>
        <tbody>
          {rows.map(r => (
            <tr key={r.id} style={{borderTop:'1px solid #222'}}>
              <td>{r.email}</td>
              <td>{r.status}</td>
              <td>{r.source}</td>
              <td>{new Date(r.subscribed_at).toLocaleString()}</td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  );
}
