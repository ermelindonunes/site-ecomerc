const headerStyle = new CSSStyleSheet();
headerStyle.replaceSync(/*CSS*/`
    header {
        display: flex;
        justify-content: space-between;
        padding: 0px;
        margin: 0px;
        height: 70px;
        width: 100%;
        background-color: var(--primary-color);
    }

    #logo-header{
        height: 70px;
        width: 70px;

    }

    #header-cart-icon {
        width: 40px;
        height: 40px;
        margin-bottom: 15px;
        margin-top: 15px;
    }

    #header-red-counter {
        position: relative;
        display: inline-block;
        background-color: red;
        height: 15px;
        width: 15px;
        min-width: 15px;
        color: white;
        top: -15px;
        right: 15px;
        border: 1px red solid;
        border-radius: 50%;
        text-align: center;
        vertical-align: baseline;
    }

    #header-counter {
        margin: 0px;
    }
`);

const template = document.createElement ('template')
template.innerHTML = /*HTML*/`
<header>
    <img logo-header src="assets/images/logo-servitec.jpg" alt="">
    <div id="container-cart-icon">
    <img id="header-cart-icon" src="assets/icons/cart-shopping-svgrepo-com.svg" alt="">
    <span id="header-red-counter">
        <p id="header-counter">0</p>
    </span>
    </div>
</header>`

class ComponentHeader extends HTMLElement {
    constructor() {

        super();

        const shadow = this.attachShadow({ mode: 'closed' });

        shadow.adoptedStyleSheets = [headerStyle];

        shadow.appendChild(template.content.cloneNode(true));
    }
}

window.customElements.define('component-header', ComponentHeader);