document.getElementById('botao-busca').addEventListener('click', function() {
    const usuario = document.querySelector('input[name="usuario"]').value;

    fetch(`/search/${usuario}`)
        .then(response => response.json())
        .then(data => {
            const userTable = document.querySelector('.tabela-usuario');
            userTable.innerHTML = '';

            if (data && data.login) {
                const login        = data.login;
                const avatarUrl    = data.avatar_url;
                const name         = data.name || '-';
                const location     = data.location || '-';
                const followers    = data.followers;
                const repositories = data.public_repos;
                const url          = data.html_url;

                const row = `
                    <tr>
                        <th>Avatar</th>
                        <th>Username</th>
                        <th>Nome</th>
                        <th>Localização</th>
                        <th>Seguidores</th>
                        <th>Repositórios</th>
                        <th>Url</th>
                    </tr>
                    <tr>
                        <td><img src="${avatarUrl}" alt="${login}" width="40" height="40"></td>
                        <td>${login}</td>
                        <td>${name}</td>
                        <td>${location}</td>
                        <td>${followers}</td>
                        <td>${repositories}</td>
                        <td>
                            <a href="${url}" target="_blank">Link do perfil</a>
                        </td>
                    </tr>
                `;

                userTable.innerHTML     = row;
                userTable.style.display = 'table';
            } else {
                alert('Usuário não encontrado!');
                document.querySelector('input[name="usuario"]').value = '';
                userTable.style.display = 'none';
            }
    })
    .catch(error => {
        alert('Falha ao consultar usuário!');

        console.error('Error:', error);
    });
});

document.getElementById('form-busca').addEventListener('keydown', function(event) {
    if (event.key === 'Enter') {
        event.preventDefault();
        return false;
    }
});