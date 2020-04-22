$(document).ready(function() {
    $('#btn-create-student').click(function () {
        StudentController.createStudent();
    });
    $('#btn-save-student').click(function () {
        StudentController.saveStudent();
    });
});

var StudentController = {
    createStudent : function () {
        var url ='/students/showoverlayaddstudent';
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: url,
            type: 'GET',
            data: {},
            dataType: 'JSON',
            success: function (data) {
                var configObj = {
                    autoOpen: false,
                    draggable: true,
                    closeOnEscape: true,
                    height: 600,
                    width: 500,
                    resizable: false,
                    title : data.title,
                    modal : true,
                };
                $('#' + data.overlayId).dialog(configObj);
                if(data.html) {
                    $('#' + data.overlayId).html(data.html);
                }
                $('#' + data.overlayId).dialog("open");
            }
        });

    },

    saveStudent: function ()
    {
        var url ='/students/savestudent';
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: url,
            type: 'POST',
            data: {},
            dataType: 'JSON',
            success: function (data) {
                $('#addStudent').dialog("close");
                window.location.reload(true);
            }
        });

    }

}

