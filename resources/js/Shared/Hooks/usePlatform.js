import { usePage } from "@inertiajs/vue3"

export default function usePlatform (page = '') {
    const {props} = usePage()
    const {logo, name, slug, settings, content: platform_content,  ...platform} = props.platform

    const render = ({
        default_value = null, 
        key = null, 
        value = null, 
        classes = '', 
        element = 'span',
        prepend = '',
        append = ''
    }) => {
        const item = platform_content[page].sections;

        if(!Array.isArray(item)) {
            return item == undefined ? defaultValue(default_value, element, classes) : item;
        }

        const content = item.find(val => val.type == key);
        if(!content) return defaultValue(default_value, element, classes);
        const val = content.data[value] ?? null;

        if(val) {
            if(typeof val == 'string') return `${prepend}${formatText(val, element, classes)}${append}`;
            if(Array.isArray(val) && item.length > 0) return val;
            return val;
        }
        
        return defaultValue(default_value, element, classes);
    }

    return { render, logo, name, code: slug, content: platform_content, settings, page, format: formatText }

}

const formatText = (text, { element = 'span', classes = '', append = '', prepend = ''}) => {
    return `${prepend}${text.replace(/\*\*(.*?)\*\*/g, `<${element} >$1</${element}>`)}${append}`
}

function defaultValue(value, element, classes = null) {
    // if(Array.isArray(value)) return value;
    if(typeof value == 'string') return formatText(value, element, classes);
    return value;
}