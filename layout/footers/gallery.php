<script src="/js/jquery.lazy.js"></script>
<script src="/js/lazy.js"></script>
<script src="/blueimp/js/blueimp-gallery.min.js"></script>
<script>
  document.getElementById('links').onclick = function(event) {
    event = event || window.event
    var target = event.target || event.srcElement,
    link = target.src ? target.parentNode : target,
    options = { index: link, event: event },
    links = this.getElementsByTagName('a')
    blueimp.Gallery(links, options)
  }
</script>
