<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaravelPad</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
            width: 100%;
            font-family: sans-serif;
        }

        textarea {
            width: 100%;
            height: 100%;
            padding: 1em;
            font-size: 1em;
            border: none;
            resize: none;
            outline: none;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <textarea id="editor" placeholder="Digite seu texto aqui...">{{ $content ?? '' }}</textarea>
</body>
<script>
    const textarea = document.getElementById('editor');
    let previousContent = @json($content ?? '');
    let timeout = null;

    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    textarea.addEventListener('input', () => {
        clearTimeout(timeout);
        timeout = setTimeout(() => {
            const currentContent = textarea.value;
            const name = window.location.pathname;

            if (currentContent !== previousContent) {
                fetch('/save-text', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        name: name,
                        content: currentContent
                    })
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Texto salvo com sucesso:', data);
                    previousContent = currentContent;
                })
                .catch(error => {
                    console.error('Erro ao salvar texto:', error);
                });
            }
        }, 1000);
    });
</script>
</html>