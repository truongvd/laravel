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
        var options = {
            'backdrop': 'static'
        };
        $('#edit-modal').modal(options);
    },

    saveStudent: function ()
    {
        var url = 'students/savestudent';
        $.ajax({
            type: "POST",
            url: url,
            data: {},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function() {
                console.log("Value added ");
            }
        });
    }

}

