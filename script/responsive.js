function updateResponsive(){
	let bodyStyle = document.querySelector('body').style
	let headerStyle = document.querySelector('header').style
	let h2Style = document.querySelector('header>h2').style
	let menuIcon = document.querySelector('header>#menu').style
	if (window.innerWidth < 860) {
		bodyStyle.marginLeft = '0%'
		bodyStyle.marginRight = '0%'
		bodyStyle.paddingLeft = '2em'
		headerStyle.textAlign = 'left'
		headerStyle.marginLeft = '-2em'
		headerStyle.marginRight = '0em'
		headerStyle.paddingLeft = '1em'
		headerStyle.borderRadius ='0 0 0 0'
		h2Style.display = 'block'
		h2Style.marginLeft = '3em'
		h2Style.marginTop = '-1.5em'
		menuIcon.display = 'inline-block'
	} else {
		bodyStyle.marginLeft = '15%'
		bodyStyle.marginRight = '15%'
		bodyStyle.paddingLeft = '0em'
		headerStyle.textAlign = 'center'
		headerStyle.marginLeft = '-1.5em'
		headerStyle.marginRight = '-1.5em'
		headerStyle.paddingLeft = '0em'
		headerStyle.borderRadius ='0 0 1em 1em'
		h2Style.display = 'inline-block'
		h2Style.marginLeft = '0'
		h2Style.marginTop = '0'
		menuIcon.display = 'none'
	}
		
}

addEventListener('resize', updateResponsive)
updateResponsive()
console.log(window.innerWidth)