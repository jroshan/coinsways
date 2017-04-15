using System;
using System.Collections.Generic;
using System.Data;
using System.Data.Entity;
using System.Linq;
using System.Net;
using System.Web;
using System.Web.Mvc;
using Coinsways.Entities;

namespace Coinsways.Areas.Admin.Controllers
{
    public class TypeOfTransactionController : Controller
    {
        private CoinswaysDbEntities db = new CoinswaysDbEntities();

        // GET: /Admin/TypeOfTransaction/
        public ActionResult Index()
        {
            return View(db.TypeOfTransactions.ToList());
        }

        // GET: /Admin/TypeOfTransaction/Details/5
        public ActionResult Details(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            TypeOfTransaction typeoftransaction = db.TypeOfTransactions.Find(id);
            if (typeoftransaction == null)
            {
                return HttpNotFound();
            }
            return View(typeoftransaction);
        }

        // GET: /Admin/TypeOfTransaction/Create
        public ActionResult Create()
        {
            return View();
        }

        // POST: /Admin/TypeOfTransaction/Create
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create([Bind(Include="ID,Details,IsActive")] TypeOfTransaction typeoftransaction)
        {
            if (ModelState.IsValid)
            {
                db.TypeOfTransactions.Add(typeoftransaction);
                db.SaveChanges();
                return RedirectToAction("Index");
            }

            return View(typeoftransaction);
        }

        // GET: /Admin/TypeOfTransaction/Edit/5
        public ActionResult Edit(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            TypeOfTransaction typeoftransaction = db.TypeOfTransactions.Find(id);
            if (typeoftransaction == null)
            {
                return HttpNotFound();
            }
            return View(typeoftransaction);
        }

        // POST: /Admin/TypeOfTransaction/Edit/5
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit([Bind(Include="ID,Details,IsActive")] TypeOfTransaction typeoftransaction)
        {
            if (ModelState.IsValid)
            {
                db.Entry(typeoftransaction).State = EntityState.Modified;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            return View(typeoftransaction);
        }

        // GET: /Admin/TypeOfTransaction/Delete/5
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            TypeOfTransaction typeoftransaction = db.TypeOfTransactions.Find(id);
            if (typeoftransaction == null)
            {
                return HttpNotFound();
            }
            return View(typeoftransaction);
        }

        // POST: /Admin/TypeOfTransaction/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirmed(int id)
        {
            TypeOfTransaction typeoftransaction = db.TypeOfTransactions.Find(id);
            db.TypeOfTransactions.Remove(typeoftransaction);
            db.SaveChanges();
            return RedirectToAction("Index");
        }

        protected override void Dispose(bool disposing)
        {
            if (disposing)
            {
                db.Dispose();
            }
            base.Dispose(disposing);
        }
    }
}
