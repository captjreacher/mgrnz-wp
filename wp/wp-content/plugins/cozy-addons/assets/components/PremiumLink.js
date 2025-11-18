import { __ } from "@wordpress/i18n";

export const PremiumLink = () => {
	return (
		<>
			<div
				style={{
					display: "flex",
					flexDirection: "column",
					justifyContent: "center",
					alignItems: "center",
					padding: "16px",
					marginBottom: "10px",
				}}
			>
				<p>
					<svg
						width="41"
						height="48"
						viewBox="0 0 41 48"
						fill="none"
						xmlns="http://www.w3.org/2000/svg"
					>
						<path
							d="M0 34.7721L6.88004 38.677V15.8055L20.4542 7.80977L23.9872 9.4833L30.4953 5.57841L20.4542 -7.62939e-06L0 11.9006V34.7721Z"
							fill="#38DAC7"
						/>
						<path
							d="M32.9284 6.87939L34.2126 7.61318L12.3825 19.904L12.1991 40.45L20.6376 45.8616L41.0001 33.6625V35.4969L20.6376 47.6043L10.8232 41.2755V18.9868L32.9284 6.87939Z"
							fill="#5566CA"
						/>
						<path
							d="M37.6063 9.53936L36.2305 8.71385L14.217 21.3716V38.9824L20.5459 43.5685L41.0001 31.3694V29.5349L20.5459 41.8258L15.5928 38.2486V22.1054L37.6063 9.53936Z"
							fill="#5566CA"
						/>
						<path
							d="M41.0001 11.3738L39.5325 10.5483L17.3356 23.2061V37.2397L20.5459 39.6244L41.0001 27.4253V25.6826L20.5459 37.79L18.9866 36.5976V24.1233L41.0001 11.3738Z"
							fill="#5566CA"
						/>
					</svg>
				</p>
				<h2
					style={{
						fontSize: "18px",
						fontFamily: "Inter",
						marginTop: "-5px",
						marginBottom: "15px",
					}}
				>
					{__("Access Without Limits!", "cozy-addons")}
				</h2>
				<p style={{ textAlign: "center", lineHeight: "20px" }}>
					{__(
						"Access more blocks and advanced features for effortless design. Upgrade today for a richer web-building experience!",
						"cozy-addons"
					)}
				</p>
				<a href="https://cozythemes.com/pricing-and-plans/" target="_blank">
					<button
						className="cozy-block-premium-button"
						style={{
							backgroundColor: "#0c50ff",
							borderRadius: "20px",
							padding: "10px 22px",
							border: "none",
							color: "#fff",
							fontSize: "11px",
							fontWeight: "500",
							cursor: "pointer",
						}}
					>
						<div
							style={{
								display: "flex",
								gap: "5px",
								margin: "0",
							}}
						>
							<div>
								<svg
									width="10"
									height="10"
									viewBox="0 0 10 10"
									fill="none"
									xmlns="http://www.w3.org/2000/svg"
								>
									<path
										d="M9.29768 0.0630875L0.24397 5.2847C-0.109583 5.48778 -0.0646564 5.97987 0.286944 6.12828L2.36334 6.99919L7.97527 2.05487C8.0827 1.95919 8.23506 2.10565 8.14325 2.21695L3.43767 7.94822V9.52017C3.43767 9.98102 3.99437 10.1626 4.26784 9.8287L5.50821 8.31924L7.94206 9.33857C8.21943 9.45573 8.53588 9.28194 8.58666 8.98317L9.99306 0.547365C10.0595 0.152913 9.6356 -0.132186 9.29768 0.0630875Z"
										fill="white"
									/>
								</svg>
							</div>
							<div>{__("Upgrade to Pro", "cozy-addons")}</div>
						</div>
					</button>
				</a>
			</div>
		</>
	);
};
