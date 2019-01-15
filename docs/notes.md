_Add status field to task!!!_

index page /
    login as admin
    login as guest
        remember in session how are is visitor

separately use blade from laravel
if guest
    create
    list
if admin
    set done
    edit


_Add model class for user and task_
Simplest ORM: <https://github.com/fulldecent/thin-pdo>

---

no no no

index page is view list of tasks
sorting (username, email and status) and pagination (by 3)
and may be button 'Login as admin'

Create new task page from index for all visitors

login page for admin/123

only admin may enter to task and edit (task/{id})

may be all users also can see task detailed, but cannot edit (admin see text fields for editing)

Good example for js sorting <https://stackoverflow.com/questions/8837191/sort-an-html-list-with-javascript>


