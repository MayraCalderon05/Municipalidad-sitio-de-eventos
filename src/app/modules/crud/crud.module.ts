import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { CrudRoutingModule } from './crud-routing.module';
import { CrudComponent } from './pages/crud/crud.component';


@NgModule({
  declarations: [
    CrudComponent,
  ],
  imports: [
    CommonModule,
    CrudRoutingModule
  ],
  exports: [
    CrudComponent
  ]
})
export class CrudModule { }
