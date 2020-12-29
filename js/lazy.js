$(function() {
  $('.lazy').Lazy({
    effect: "fadeIn",
	effectTime: -1,
    threshold: 0,
    //Ommit loading all images at once
    beforeLoad: function(element) {
      element.css({"height": "200px"});
    },
    afterLoad: function(element) {
      element.css({"height": "auto"});
    }
  });
});
