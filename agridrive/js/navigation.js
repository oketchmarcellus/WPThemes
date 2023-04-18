const dropdowns = $('#primary').children('.menu-item-has-children')

if (dropdowns.length > 0) {
  dropdowns.each((i, el) => {
    const li = $(el)
    const link = $('> a:first-child', li)
    const toggle = $(`<a href="#" class="dropdown-toggle icon-caret"
      data-toggle="dropdown" role="button" aria-haspopup="true"
      aria-expanded="false" class="caret"><i class="fa fa-caret-down"></i></a>`)
    toggle
      .addClass('dropdown-toggle')
      .attr('data-toggle', 'dropdown')
      .attr('role', 'button')
      .attr('aria-haspopup', 'true')

    li.append(toggle)

    link.on('mouseover', function () {
      if (!$(this).parent().hasClass('open')) {
        $('a.icon-caret', $(this).parent()).dropdown('toggle')
      }
    })

    $('ul.sub-menu', li).addClass('dropdown-menu')

    toggle.dropdown()
  })
}