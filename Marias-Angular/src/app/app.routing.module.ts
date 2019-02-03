import { NgModule } from '@angular/core';
import { Routes, RouterModule, Router } from '@angular/router';

import { NavbarComponent } from './navbar/navbar.component';
import { HomeComponent } from './pages/home/home.component';
import { AboutUsComponent } from './pages/about-us/about-us.component';
import { ContactComponent } from './pages/contact/contact.component';
import { JoinUsComponent } from './pages/join-us/join-us.component';
import { BlogComponent } from './pages/blog/blog.component';

const appRoutes: Routes = [
    { path: 'home', component: HomeComponent},
    { path: 'about-us', component: AboutUsComponent},
    { path: 'contact', component: ContactComponent},
    { path: 'join-us', component: JoinUsComponent},
    { path: 'blog', component: BlogComponent}
];

@NgModule ({
    imports: [RouterModule.forRoot(appRoutes)],
    exports: [RouterModule]
})

export class AppRoutingModule {
    
}