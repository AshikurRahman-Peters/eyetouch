
function likeThisProduct(productID, loginID) {
  if(window.loggedInSuccess){
	  $.ajax({
	      url: '/like/' + loginID,
	      success: function(data) {
	    	document.querySelector('.likes-for-' + loginID).innerHTML = "<i class='fa fa-bookmark'></i> "+data[0];
	    	if(data[0] === '0'){
	    		document.querySelector('.likes-for-' + loginID).style.display = "none";
	    	} else {
	    		document.querySelector('.likes-for-' + loginID).style.display = "initial";
	    	}
	        var likedButton = document.querySelector('.like-id-' + loginID);
	        if (data[1] == 'Save') {
	          likedButton.classList.remove("product-already-liked");
	          likedButton.innerHTML = "<i class='fa fa-bookmark'></i> Save";
	        } else {
	          likedButton.classList.add("product-already-liked");
	          likedButton.innerHTML = "<i class='fa fa-bookmark'></i> Saved";
	          fbq('track', 'AddToWishlist');
	        }
	      }
	    });
  } else if (productID == 'login') {
// 	  invokeLogin();
  } else {
    $.ajax({
      url: '/like/' + productID,
      success: function(data) {
    	document.querySelector('.likes-for-' + productID).innerHTML = "<i class='fa fa-bookmark'></i> "+data[0];
    	if(data[0] === '0'){
    		document.querySelector('.likes-for-' + productID).style.display = "none";
    	} else {
    		document.querySelector('.likes-for-' + productID).style.display = "initial";
    	}
        var likedButton = document.querySelector('.like-id-' + productID);
        if (data[1] == 'Save') {
          likedButton.classList.remove("product-already-liked");
          likedButton.innerHTML = "<i class='fa fa-bookmark'></i> Save";
        } else {
          likedButton.classList.add("product-already-liked");
          likedButton.innerHTML = "<i class='fa fa-bookmark'></i> Saved";
          fbq('track', 'AddToWishlist');
        }
      }
    });
  }
}
function shareThisProduct(productUrl) {
  FB.ui({
    method: 'share',
    href: productUrl
  }, function(response) {});
}
