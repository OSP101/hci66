const input = document.querySelector('input');
const upload = document.querySelector('.upload');
const progress = document.querySelector('.progress');
const percent = document.querySelector('.percent');
const progressBar = document.querySelector('.progress-bar');

    upload.onclick = () => {
        if (input.files.length > 0) {
            fetch('/hci66/student/solo/checktime.php',)
        .then(response => response.json())
        .then(data => {
            console.log("Solo");
            console.log(data.success);
            if (data.success) {
                    // Show the progress bar
        progress.style.display = 'block';

        // Make HTTP request to our php file
        var http = new XMLHttpRequest();

        // Now send file data
        var data = new FormData();

        // For appending multiple files
        for (var i = 0; i < input.files.length; i++) {
            data.append('file' + i, input.files[i]);
        }

        // Also send files length will use in php file
        data.append('files_length', input.files.length);

        http.onload = () => {
            // When complete
            progressBar.innerHTML = "Done";
            Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer);
                    toast.addEventListener('mouseleave', Swal.resumeTimer);
                }
            });
            
            Toast.fire({
                icon: "success",
                title: "อัปโหลดไฟล์สำเร็จ"
            }).then(() => {
                window.location.href = "/hci66/student/solo/";
            });
        };

        // Now show progress
        http.upload.onprogress = (e) => {
            const percentComplete = (e.loaded / e.total) * 100;
            progress.style.display = 'block';
            // progressBar.innerHTML = Math.floor(percentComplete) + '%';
            progressBar.innerHTML = (e.loaded / (1024 * 1024)).toFixed(2) + 'MB /' + (e.total / (1024 * 1024)).toFixed(2) + 'MB (' + Math.floor(percentComplete) + '%)';
            progressBar.style.width = percentComplete + '%';
        };

        http.open('POST', '/hci66/student/solo/upload.php', true);
        http.send(data);
            }else{
                alert('ไม่สามารถส่งงานได้ เนื่องจากหมดเวลาในการส่งงานแล้ว');
                window.location.href = "/hci66/student/solo/";
            }

    })
    }
    };