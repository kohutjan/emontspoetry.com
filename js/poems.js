var poems_path = $(".poems").attr("poems-path");
console.log(poems_path);

//Parse poems.xml and create HTML
$.ajax({
  url: poems_path,
  type: 'get',
  async: false,
  dataType: 'xml',
  success: function(xml) {
    var counter = 0;
    $(xml).find('poem').each(function() {
      var title = $(this).find('title').text();
      var date = $(this).find('date').text();
      var text = $(this).find('text').text();
      var note = $(this).find('note').text();

      $(".poems-list").append('<a class="list-group-item list-group-item-action" \
                               href="#list-item-'+ counter + '">' + title + '</a>');

     
	  $(".poems-content").append('<h3 class="pt-4" id="list-item-' + counter + '">' + title + '</h3> \
                                  <p>' + text.replace(/(?:\r\n|\r|\n)/g, '<br>') + '</p>');
	 

      $(".poems-content").append('<h5>' + date + '</h5>');

      $(".poems-content").append('<div class="pt-2 pb-5"> \
                                  <a class="text-muted" data-toggle="collapse" \
                                   href="#collapse-' + counter + '" role="button" \
                                   aria-expanded="false" aria-controls="collapse-' + counter + '"> \
                                   <i class="far fa-comment-alt fa-2x"></i> \
                                  </a> \
                                  <div class="collapse pt-2" id="collapse-' + counter + '"> \
                                    <div class="card card-body"> \
                                      ' + note + ' \
                                    </div> \
                                  </div> \
                                  </div>');
      counter += 1;
    });
  }
});
