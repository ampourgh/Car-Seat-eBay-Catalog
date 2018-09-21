$(function() {
  var button = $("#button");
  var wrapper = $("#wrapper");
  var list = $("#list");

  wrapper.removeClass('open');
  wrapper.height(0);

  button.click(function() {

    if(wrapper.hasClass('open')) {
      wrapper.removeClass('open');
      wrapper.height(0);
    } else {
      wrapper.addClass('open');
      wrapper.height(list.outerHeight(true));
      document.getElementById("button").style.display = "none";
    }
  });
});
