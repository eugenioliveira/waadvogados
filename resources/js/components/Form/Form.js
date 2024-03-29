import Errors from './Errors';

export default class Form {

    /**
     * Cria uma nova instância de formulário, inicializando o repositório de errors
     *
     * @param {object} fields
     */
    constructor(fields) {
        this.originalFields = fields;

        for (let field in fields) {
            this[field] = fields[field]
        }

        this.errors = new Errors();
        this.headers = new Headers();
    }

    /**
     * Retorna dados relevantes do formulário.
     */
    data() {
        let data = {};

        for (let field in this.originalFields) {
            data[field] = this[field];
        }

        return data;
    }

    /**
     * Limpa os campos do formulário.
     */
    reset() {
        for (let field in this.originalFields) {
            this[field] = '';
        }

        this.errors.clear();
    }

    /**
     * Submete o formulário utilizando o método 'POST'
     *
     * @param {string} url
     */
    post(url) {
        this.submit('post', url);
    }

    /**
     *
     * Submete o formulário
     *
     * @param {string} method
     * @param {string} endpoint
     * @returns {Promise<any>}
     */
    submit(method, endpoint) {
        return new Promise((resolve, reject) => {
            axios[method](endpoint, this.data())
                .then((response) => {
                    this.onSuccess(response.data);

                    resolve(response.data);
                })
                .catch((error) => {
                    this.onFail(error.response);

                    reject(error.response);
                });
        });
    }

    /**
     * Lida com o caso onde a submissão do formulário deu certo.
     *
     * @param data
     */
    onSuccess(data) {

        Swal.fire({
            title: 'Sucesso!',
            text: data.message,
            type: 'success',
            confirmButtonText: 'Ok'
        })

        this.reset();
    }

    /**
     * Lida com o caso onde a submissão do form deu erro.
     * @param errors
     */
    onFail(errors) {
        if (errors.status === 423) {
            Swal.fire({
                title: 'Erro!',
                text: 'Houve um erro ao enviar o e-mail.',
                type: 'error',
                confirmButtonText: 'Ok'
            })
        } else {
            this.errors.record(errors.data);
        }
    }
}
