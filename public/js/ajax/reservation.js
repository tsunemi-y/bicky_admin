$(document).ready(function () {
  // CSRFトークンの設定
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  //予約リスト表示
  $('#btn').click(function () {
    $('#list').empty();
    $.ajax({
      url: '/reservation/show',
      type: 'GET',
      dataType: 'json',
      data: {
        query: $('input[name="query"]').val()
      }
    }).done(function (data) {
      if (data.length === 0) {  //予約がない場合
        let none = `
        <tr>
          <td>予約がありません</td>
        </tr>`;

        $('#list').append(none);
        return;
      }

      for (let i = 0; i < data.length; i++) {  //予約がある場合
        let html = `
        <tr>
          <td>${data[i].parentName}</td>
          <td>${data[i].reservation_date}</td>
          <td><button class="deleteBtn" data-id="${data[i].id}">予約キャンセル</button></td>
        </tr>
        `;

        $('#list').append(html);
      }

    })
  })
  //予約リスト削除
  $('body').on('click', '.deleteBtn', function () {
    if (confirm('本当にキャンセルしますか？') === true) {
      let id = $(this).data('id');
      let row = $(this).closest('tr');

      $.ajax({
        url: `/reservation/delete${id}`,
        type: 'POST',
        dataType: 'json',
        data: {
          _method: 'DELETE'
        }
      }).done(function (data) {
        row.remove();
      });
    } else {
      return false;
    }
  });
});

