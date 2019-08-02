import {AbstractComponent, ComponentLoader} from "../../../AbstractComponent";

declare let $: any;

class ExampleComponent extends AbstractComponent {

    public static selector: string = 'example-component';

    init() {
        super.init();

        this.getComponentElement().on('click', function()
        {
            this.getComponentElement().toggleClass('example-component--hide-ish');
        }.bind(this));
    }
}

new ComponentLoader(ExampleComponent);
