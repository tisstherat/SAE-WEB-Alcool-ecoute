function updateResponsive(){
	let headerStyle = document.querySelector('header').style
	let h2Style = document.querySelector('header>h2').style
	let menuIcon = document.querySelector('header>#menu').style
	if (window.innerWidth < 600) {
		headerStyle.textAlign = 'left'
		headerStyle.paddingLeft = '1em'
		h2Style.display = 'block'
		h2Style.marginLeft = '3em'
		h2Style.marginTop = '-1.5em'
		menuIcon.display = 'inline-block'
	} else {
		headerStyle.textAlign = 'center'
		headerStyle.paddingLeft = '0em'
		h2Style.display = 'inline-block'
		h2Style.marginLeft = '0'
		h2Style.marginTop = '0'
		menuIcon.display = 'none'
	}
		
}

addEventListener('resize', updateResponsive)
updateResponsive()
console.log(window.innerWidth)