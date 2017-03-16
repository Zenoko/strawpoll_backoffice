# Strawpoll API

Ceci est le backoffice de l'application du Strawpoll réalisée par Adam Attafi, Guillaume Peres et Sébastien Verneyre. Cette api est propulsée par Laravel dans sa version 5.4 et une base de données PostgreSQL.

# Documentation

## Routes

**GET** http://strawpoll.guillaumeperes.fr/api/duplicationchecks

Une requête en GET sur cette route retournera la liste des méthodes prises en charge par l'api pour contrôler le fait qu'un utilisateur puisse ou non voter plusieurs fois à un sondage. Retourne un objet JSON sous la forme : 

```json
{
  "duplication_checks": [
    {
      "id": 1,
      "name": "method name",
      "label": "human readable method label"
    },
  ]
}
```

## Routes en développement

**POST** http://strawpoll.guillaumeperes.fr/api/poll/

Permettra de créer un sondage.

**GET** http://strawpoll.guillaumeperes.fr/poll/{poll_id}/

Permettra de retrouver les données du sondage identifié par {poll_id}.

**POST** http://strawpoll.guillaumeperes.fr/api/poll/{poll_id}/answers/

Permettra d'ajouter des votes au sondage identifié par {poll_id}.

**GET** http://strawpoll.guillaumeperes.fr/api/poll/{poll_id}/answers/

Permettra de récupérer les votes du sondage identifié par {poll_id}.
