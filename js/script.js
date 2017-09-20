
window.addEventListener('load', function() {

  // Checking if Web3 has been injected by the browser (Mist/MetaMask)
  if (typeof web3 !== 'undefined') {
    // Use Mist/MetaMask's provider
    window.web3 = new Web3(web3.currentProvider);
	document.getElementById("no-web3").style.display = "none"
	$("#enter").delay(2000).fadeIn(2000);
  } else { 
  	 document.getElementById("no-web3").style.display = "block"
    // fallback - use your fallback strategy (local node / hosted node + in-dapp id mgmt / fail)
    window.web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:8545"));
  }

  // Now you can start your app & access web3 freely:
  startApp()

})

setTimeout(function(){
    
    var div = $('.border-fade');
    $({alpha:1}).animate({alpha:0}, {
        duration: 1000,
        step: function(){
            div.css('border-color','rgba(0, 70, 15,'+this.alpha+')');
        }
    });
    
}, 2000);
