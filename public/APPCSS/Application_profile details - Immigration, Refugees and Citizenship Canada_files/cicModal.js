function helpModal(id) {
	$(document).trigger( "open.wb-lbx", 
			[
			 {
				 src: "#"+id, 
				 type: "inline"
					 }
					 ]
	);
	/*
		Modify dom to fix the issue for landmark
		From this: <div class="mfp-content" aria-labelledby="lbx-title" role="document">
		To this: <section class="mfp-content" role="complementary" aria-labelledby="lbx-title">
	*/

	setTimeout( function() {
		function randomIntFromInterval(min, max) { // min and max included 
			return Math.floor(Math.random() * (max - min + 1) + min)
		}
		const rndInt = 'lbx-title-'+randomIntFromInterval(1, 999);
		var elSection = document.getElementsByClassName('mfp-content');
		
		if(elSection.length > 0){
			var idLbx = document.getElementById('lbx-title');
			idLbx.setAttribute('id', rndInt);
			var getID = idLbx.getAttribute('id');
			var section = document.createElement('section');

			section.className = elSection[0].className;
			section.innerHTML = elSection[0].innerHTML;
			section.setAttribute('role', 'complementary');
			section.setAttribute('aria-labelledby', getID);
			elSection[0].parentNode.replaceChild(section, elSection[0]);
		}
	}, 2000);
 
}
