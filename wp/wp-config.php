/**
 * MGRNZ / Maximised AI Integration Settings
 * -----------------------------------------
 * Secrets and endpoints for automation + webhook flows
 */

// Example: if you want the mu-plugin to send to Supabase on post publish/update
putenv('MGRNZ_WEBHOOK_URL=https://jqfodlzcsgfocyuawzyx.functions.supabase.co/wp-sync');
putenv('MGRNZ_WEBHOOK_SECRET=<random-32-char-secret>');

define('AUTH_KEY',         'wMa,y[bUG+E4_:/-~x)=8G-L-de<3>Kql&@e>RI>1@1v)Vt7;E33mH/Th9f?[6zs');
define('SECURE_AUTH_KEY',  'u2ywE{GVi8YIn9-4ij)Pfv@ .)#&@~[50]XB:UB[jO:?|u+TjE)pkSPx1|m+Jq(O');
define('LOGGED_IN_KEY',    'F;pyBGfw7&xPQy8Y|O+~&jJV+6Fh{]D_% |wE, z>}>z(4bKYs|Rc-VzJ~Q2zU!|');
define('NONCE_KEY',        'AzZ3z/):e>d}|E9om{/pJeT@bBxmucYVJh(TxLqa(;3g-q-!K{Y<)MpGEkJ5TcT@');
define('AUTH_SALT',        '9:FW:]1/cD,y<rr*73fd*i:k`ah}Kc=@msnh;(aPDAG[8CqX/a~$UwUDusr6xiTw');
define('SECURE_AUTH_SALT', '/W817Alh5#KDjD2XBU(f6r_m+..r6HVy#S#OE}0)kSpCq-T3nS,P2MC9(?B~aq6w');
define('LOGGED_IN_SALT',   'H~/StWvUDksP%x0VO+Mf|K/]NVFac-I=?y&=lFze+ExY[Kb[&iZ!.&V^a+%Kzu@p');
define('NONCE_SALT',       't+f3|e|+BK,Q^bIdS_#}8W/8m8u:ZNqedc]X)%noKM_]LU*2mqLNiD7;}tW?kRT#');

// Optional: reference domain for CORS verification (if you want to centralize)
putenv('MGRNZ_ALLOWED_ORIGIN=https://maximisedai.com');

// Optional: WordPress REST API credentials (used by Supabase posting function)
putenv('WP_API_BASE=https://mgrnz.com/wp');
putenv('WP_USER=agent@mgrnz.com');
putenv('WP_APP_PASSWORD=hu86dnk@i*5snk!fgmk952vmmlj');

define( 'DB_NAME',     'MGRNZ' );
define( 'DB_USER',     'Admin' );
define( 'DB_PASSWORD', 'Sixtynine1969!' );
define( 'DB_HOST',     'localhost' );
