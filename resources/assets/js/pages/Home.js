import React from "react";
import {
	AppBar,
	Box,
	Container,
	CssBaseline,
	Grid,
	Paper,
	Toolbar,
	Typography
} from "@material-ui/core";
import { makeStyles } from "@material-ui/core/styles";
import AnniePortrait from "../../../images/annie_portrait.png";
import LinkedinLogo from "../../../images/linkedin_logo.png";

const useStyles = makeStyles((theme) => ({
	root: {
		marginTop: theme.spacing(6)
	},
	toolbar: {
		display: "flex",
		justifyContent: "space-between",
		background: "white",
		color: "black"
	},
	toolbarTitle: {
		fontFamily: "Montserrat"
	},
	content: {
		marginTop: theme.spacing(10)
	},
	intro: {
		fontFamily: "Merriweather"
	}
}));
const Home = () => {
	const classes = useStyles();

	return (
		<div>
			<CssBaseline />
			<AppBar position="static">
				<Toolbar className={classes.toolbar}>
					<div></div>
					<Typography className={classes.toolbarTitle} variant="h3">
						Annie Le
					</Typography>
					<div></div>
				</Toolbar>
			</AppBar>
			<Container maxWidth="md" className={classes.root}>
				<Grid container spacing={2} className={classes.content}>
					<Grid item xs={12} sm={6} style={{ order: 2 }}>
						<Box>
							<Typography className={classes.intro}>
								<strong>Annie Le, RN, BSN</strong> is a
								registered nurse at Los Angeles County + USC
								Medical Center.
								<br />
								<br />
								She graduated from Los Angeles Valley Community
								College and Phoenix University with honors. To
								further helping her community and developing her
								nursing skils, she currently enrolling in a
								Nurse Practioner program.
								<br />
								<br />
								While not working, Annie likes to cook and
								travel.
							</Typography>
						</Box>
					</Grid>
					<Grid item xs={12} sm={6} style={{ order: 1 }}>
						<Box
							style={{
								display: "flex",
								justifyContent: "center"
							}}
						>
							<img
								src={AnniePortrait}
								width="200px"
								height="200px"
							/>
						</Box>
					</Grid>
					<Grid
						container
						item
						xs={12}
						style={{ order: 3, marginTop: "50px" }}
					>
						<Typography
							variant="subtitle1"
							className={classes.intro}
						>
							Annie can be found online via:
						</Typography>
						<Grid
							item
							xs={12}
							style={{
								display: "flex",
								justifyContent: "center",
								marginTop: "20px"
							}}
						>
							<a href="https://www.linkedin.com/in/annie-le-5064b612/">
								<img
									src={LinkedinLogo}
									width="100px"
									height="100px"
								/>
							</a>
						</Grid>
					</Grid>
				</Grid>
			</Container>
		</div>
	);
};

export default Home;
