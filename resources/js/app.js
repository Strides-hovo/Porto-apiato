import './bootstrap';

const addTodo = async (todoName) => {
    const data = await window.axios.post('todos/store', {
        name: todoName
    })
    if (data.status === 200){
        window.location.reload()
    }
}

const doneTodo = async (id, status) => {
    if (Boolean(+status)){
        return
    }
    const data = await window.axios.patch(`todos/${id}`,{
        status: !Boolean(+status)
    })
    if (data.status === 200){
        window.location.reload()
    }
}


const deleteTodo = async (id) => {
    const data = await  window.axios.delete(`todos/${id}`)
    if (data.status === 200){
        window.location.reload()
    }
}



document.querySelector('#todo-input').addEventListener('input', debounce((evt) => {
    //return findTodos(evt.target.value)
}))


document.querySelector('#add-todo').addEventListener('click', () => {
    const todoName = document.querySelector('#todo-input').value
    if (!todoName.length){
        return null
    }
    return addTodo(todoName)
})



document.querySelectorAll('#todo-list button').forEach(button => {
    button.addEventListener('click', (evt) => {
        const dataset = evt.currentTarget.dataset
        const id = dataset.id
        const action = dataset.action
        const status = dataset.status
        return action === 'remove' ? deleteTodo(id) : (action === 'done' ? doneTodo(id, status) : null)
    })
})




async function findTodos(name) {
    if (!name.length){
        console.log(name)
        return
    }
    const { data } = await window.axios.get(`todos/${name}`);
    const container = document.querySelector('#todo-list');
    container.innerHTML = ''; // очищаем старое
    if (!Array.isArray(data) || !data.length)
        return
    data.forEach(todo => {
        container.innerHTML += `
            <div class="flex mb-4 items-center">
                <p class="w-full text-grey-darkest ${todo.status ? 'line-through' : ''}">${todo.name}</p>
                <button class="flex-no-shrink p-2 ml-4 mr-2 border-2 rounded hover:text-white text-green border-green hover:bg-red-300 cursor-pointer duration-300">Done</button>
                <button class="flex-no-shrink p-2 ml-2 border-2 rounded text-red border-red hover:text-white hover:bg-red-300 cursor-pointer duration-300">Remove</button>
            </div>
        `;
    });
}



function debounce(func, ms = 500) {
    let timeout;
    return function() {
        clearTimeout(timeout);
        timeout = setTimeout(() => func.apply(this, arguments), ms);
    };
}

