export default class Errors {
    /**
     * Cria uma nova instância da classe inicializando o repositório dos erros
     */
    constructor() {
        this.errors = {}
    }

    /**
     * Determina se há algum erro para o campo.
     *
     * @param {string} field
     * @returns {boolean}
     */
    has(field) {
        return this.errors.hasOwnProperty(field);
    }

    /**
     * Determina se há erros em algum campo.
     *
     * @returns {boolean}
     */
    any() {
        return Object.keys(this.errors).length > 0;
    }

    /**
     * Retorna o erro de um determinado campo.
     *
     * @param {string} field
     * @returns {*}
     */
    get(field) {
        if (this.errors[field]) {
            return this.errors[field][0];
        }
    }

    /**
     * Grava os erros no repositório.
     *
     * @param {object} errors
     */
    record(errors) {
        this.errors = errors;
    }

    /**
     * Remove o erro de um determinado campo, ou todos.
     *
     * @param {string|null} field
     */
    clear(field = null) {
        if (field) {
            delete this.errors[field];

            return;
        }

        this.errors = {}
    }
}