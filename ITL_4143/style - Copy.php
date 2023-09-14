<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
	
	*{
		scroll-behavior: smooth;
		font-family: 'Roboto', sans-serif;
		padding: 0;
		margin: 0;
		box-sizing: border-box;
	}
	body{
		background-color: #f2f5f3;
	}
	a{
		color: #333;
		text-decoration: none;
	}
	nav{
		width: 100%;
		position: fixed;
		top: 0;
		left: 0;
		background-color: #fff;
		z-index: 99;
	}
	.nav-cont{
		max-width: var(--max-width);
		margin: auto;
		padding: 1.5rem 1rem;
		display: flex;
		align-items: center;
		justify-content: space-between;
	}
	nav .logo a{
		font-size: 1.5rem;
		font-weight: 600;
		color: #333;
		transition: 0.3s;
	}
	nav .logo a:hover{
		color: var(--primary-color-dark);
	}
	nav .checkbox{
		display: none;
	}
	nav input{
		display: none;
	}
	nav .checkbox i{
		font-size: 2rem;
		color: #333;
		cursor: pointer;
	}
	ul{
		display: flex;
		align-items: center;
		gap: 1rem;
		list-style: none;
		transition: left 0.3s;
	}
	ul li a{
		padding: 0.5rem 1rem;
		border: 2px solid transparent;
		text-decoration: none;
		font-weight: 600;
		color: var(--text-dark);
		transition: 0.3s;
	}
	ul li a:hover{
		border-top-color: var(--secondary-color);
		border-bottom-color: var(--secondary-color);
		color: var(--secondary-color);
	}
	.section{
		background-color: var(--extra-light);
	}
	.section-container{
		min-height: 100vh;
		max-width: var(--max-width);
		margin: auto;
		padding: 1rem;
		display: grid;
		grid-template-columns: repeat(2, 1fr);
		gap: 4rem;
	}
	.content{
		display: flex;
		flex-direction: column;
		justify-content: center;
	}
	.subtitle{
		letter-spacing: 2px;
		color: var(--text-light);
		font-weight: 600;
		margin-bottom: .5rem;
	}
	.title{
		font-size: 2.5rem;
		font-weight: 400;
		line-height: 3rem;
		color: var(--text-dark);
		margin-bottom: 1rem;
	}
	.title span{
		font-weight: 600;
	}
	.description{
		line-height: 1.5rem;
		color: var(--text-light);
		margin-bottom: 2rem;
	}
	.action-btns{
		display: flex;
		gap: 1rem;
	}
	.action-btns button{
		font-size: 1rem;
		font-weight: 600;
		letter-spacing: 2px;
		padding: 1rem 2rem;
		outline: none;
		border: 2px solid #333;
		border-radius: 10px;
		transition: 0.3s;
		cursor: pointer;
	}
	.btn1{
		background-color: #333;
		color: #fff;
		transition: 0.5s;
	}
	.btn1:hover{
		scale: 1.1;
	}
	.btn2{
		background-color: #fff;
		color: #333;
		transition: 0.5s;
	}
	.btn2:hover{
		scale: 1.1;
	}
	.image{
		display: grid;
		place-items: center;
	}
	.image img{
		border: 5px solid #333;
		width: min(25rem, 90%);
		border-radius: 100%;
	}
	.featured_photo {
	background-image: url(pix/fixed.jpg);
	background-attachment: fixed;
	background-size: cover;
	background-repeat: no-repeat;
	height: 500px;
}

.slider-heading{
		display: flex;
		flex-wrap: wrap;
		width: 90%;
		margin: 0px auto;
		padding: 0px 20px;
	}
	.slider-heading h3{
		margin-top: 20px;
		font-size: 50px;
		color: #fff;
		font-weight: 500;
		letter-spacing: 1px;
		line-height: 30px;
	}
	.slider-heading h3 span{
		color: #333;
	}
	.collection{
	--gap: 16px;
	--num-cols: 4;
	--row-height: 300px;

	box-sizing: border-box;
	padding: var(--gap);

	display: grid;
	grid-template-columns: repeat(var(--num-cols), 1fr);
	grid-auto-rows: var(--row-height);
	gap: var(--gap);
}

.collection > img{
	width: 100%;
	height: 100%;
	object-fit: cover;
}

.image-grid-col-2{
	grid-column: span 2;
}
.image-grid-row-2{
	grid-row: span 2;
}

/* Colorize-zoom Container */
.coll2, .coll3, .coll4, .coll5, .image-grid-col-2{
  transition: transform .5s, filter 1.5s ease-in-out;
  filter: blur(2px);
}

/* The Transformation */
.coll2:hover, .coll3:hover, .coll4:hover, .coll5:hover, .image-grid-col-2:hover {
  filter: blur(0);
}

/*Footer*/
.ftter{
	padding: 40px;
	background-color: #333;
	opacity: 0.5;
}
.ftter .social{
	margin-right: 60px;
	text-align: center;
	padding-bottom: 25px;
	color: #fff;
}
.ftter .social a{
	position: relative;
	display: inline-block;
	width: 60px;
	height: 60px;
	text-align: center;
	line-height: 60px;
	border-radius: 50%;
	font-size: 30px;
	color: #fff;
	transition: .5;
}
.ftter .social a:before{
	content: "";
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 50%;
	border-radius: 50%;
	transition: .5s;
	transform: scale(.9);
	z-index: -1;
}
.ftter .social a:hover:before{
	transform: scale(1.2);
	box-shadow: 0 0 15px #a053ad;
	filter: blur(1px);
}
.ftter p{
	margin-top: 5px;
	text-align: center;
	font-size: 15px;
	color: #fff;
}
/*End of footer*/


	@media (width < 750px){
		nav .checkbox{
			display: block;
		}
		ul{
			position: absolute;
			width: 100%;
			height: calc(100vh - 85px);
			left: -100%;
			top: 80px;
			background-color: #fff;
			flex-direction: column;
			justify-content: center;
			gap: 3rem;
		}
		nav #check:checked ~ ul{
			left: 0;
		}
		ul li a{
			font-size: 1.25rem;
		}
		.section-container{
			padding: 10rem 1rem 5rem 1rem;
			text-align: center;
			grid-template-columns: repeat(1, 1fr);
		}
		.image{
			grid-area: 1/1/2/2;
		}
		.action-btns{
			margin: auto;
		}
		.collection{
			display: inline-block;
		}

	}


</style>