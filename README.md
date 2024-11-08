# Task Management Application

## Backend - Laravel
### Installation
- `composer install`
- Configure `.env` file base de donnee : taskdb
- `php artisan migrate`
### Run project 
- php artisan serve
### Test avec Postman
 ## Lister les tâches :
   -GET /api/tasks

 ## Créer une tâche :
   -POST /api/tasks
    Payload JSON :
    
    json
    Copy code
    {
        "title": "Acheter du lait",
        "description": "Aller au supermarché",
        "due_date": "2024-11-09T12:00:00",
        "status": false
    }
    
### Afficher une tâche spécifique :
   -GET /api/tasks/{id}

 ## Mettre à jour une tâche :
    - PUT /api/tasks/{id}
    Payload JSON :
    
    json
    Copy code
    {
        "title": "Acheter du lait et du pain",
        "description": "Supermarché près de chez moi",
        "due_date": "2024-11-09T18:00:00",
        "status": true
    }
    
## Supprimer une tâche :
 - DELETE /api/tasks/{id}

