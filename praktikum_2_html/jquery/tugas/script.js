$(document).ready(function () {
    $('#formRegistrasi').on('submit', function (e) {
      e.preventDefault();
      const nama = $('#nama').val().trim();
  
      if (nama === '') {
        $('#nama').addClass('is-invalid');
      } else {
        $('#nama').removeClass('is-invalid').addClass('is-valid');
        alert('Form berhasil disubmit!');
      }
    });
  
    $('#nama').on('input', function () {
      if ($(this).val().trim() !== '') {
        $(this).removeClass('is-invalid');
      }
    });
  });
  