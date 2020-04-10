import React from "react";
import {
	Box,
	Container,
	CssBaseline,
	Grid,
	Paper,
	Typography
} from "@material-ui/core";
import { makeStyles } from "@material-ui/core/styles";

const useStyles = makeStyles((theme) => ({}));
const Home = () => {
	const classes = useStyles();

	return (
		<div>
			<CssBaseline />
			<Container maxWidth="lg">
				<Grid container spacing={2}>
					<Grid item xs={12} sm={6}>
						<Box>
							<Typography>
								<strong>Annie Le</strong> is a registered nurse
								at Los Angeles County + USC Medical Center
							</Typography>
						</Box>
					</Grid>
					<Grid item xs={12} sm={6}>
						<Box>
							<Typography>Photo goes here</Typography>
						</Box>
					</Grid>
				</Grid>
			</Container>
		</div>
	);
};

export default Home;
