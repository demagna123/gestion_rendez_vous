# 🏥 Gestion de Rendez-vous Médicaux — Application Web Laravel

## 📌 Description du projet

Cette application web est une **plateforme de gestion des rendez-vous pour une clinique**. Elle permet aux patients de réserver un créneau, aux médecins de gérer leur planning, et à l’administration de superviser l’ensemble de l’activité médicale.

> 🧠 Ce projet est conçu pour apprendre et pratiquer Laravel avec un vrai cas d’usage professionnel, tout en travaillant en collaboration via GitHub.

---

## 💼 Contexte & But

De nombreuses structures médicales ont encore une gestion manuelle de leurs rendez-vous. Ce projet vise à **numériser ce processus**, avec une interface simple, intuitive, et adaptée à chaque rôle (Admin, Médecin, Patient).

---

## 🎯 Objectifs pédagogiques

- Maîtriser le framework **Laravel 11**
- Implémenter des **rôles et permissions**
- Manipuler **les relations Eloquent** (One to Many, Many to One)
- Créer un **flux de réservation dynamique**
- Gérer un projet en **équipe avec GitHub**

---

## 🧩 Fonctionnalités principales

| Fonctionnalité                     | Admin | Médecin | Patient |
|------------------------------------|:-----:|:-------:|:-------:|
| Tableau de bord                    | ✅    | ✅      | ✅      |
| Gérer les utilisateurs             | ✅    | ❌      | ❌      |
| Ajouter médecins et spécialités    | ✅    | ❌      | ❌      |
| Créer des disponibilités           | ❌    | ✅      | ❌      |
| Réserver un rendez-vous            | ❌    | ❌      | ✅      |
| Annuler / valider un rendez-vous   | ❌    | ✅      | ❌      |
| Historique de rendez-vous          | ✅    | ✅      | ✅      |
| Voir les plannings                 | ✅    | ✅      | ✅      |


---

## 🔐 Rôles et permissions

### 👤 Admin
- Accès complet au système
- Gestion des utilisateurs, médecins, spécialités
- Supervision des rendez-vous

### 👨‍⚕️ Médecin
- Peut définir ses disponibilités
- Peut valider/annuler un rendez-vous
- Peut consulter les notes des patients

### 🧍 Patient
- Peut réserver un créneau disponible
- Peut voir son historique de rendez-vous

---

## 🧱 Modèle de données (simplifié)

