/**
 * Classe responsável pela manipulação dos cabeçalhos das requisições ajax.
 * Por padrão, nenhum cabeçalho é definido no bootstrap da aplicação,
 * para evitar o envio destes à chamadas externas.
 * 
 * Sempre que alguma chamada interna for realizada, esta classe deverá ser
 * instanciada e os cabeçalhos definidos, para maior segurança.
 */
export default class Headers {
    /**
     * Define os cabeçalhos para a segurança das requisições locais.
     */
    setHeaders() {
        window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
        let token = document.head.querySelector('meta[name="csrf-token"]');

        if (token) {
            window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
        } else {
            console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
        }
    }

    /**
     * Realiza a exclusão dos cabeçalhos, de forma a reestabelecer o funcionamento
     * das chamadas externas.
     */
    unsetHeaders() {
        delete axios.defaults.headers.common['X-CSRF-TOKEN'];
        delete axios.defaults.headers.common['X-Requested-With'];
    }
}