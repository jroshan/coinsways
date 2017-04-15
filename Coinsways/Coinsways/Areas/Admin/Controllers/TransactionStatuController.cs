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
    public class TransactionStatuController : Controller
    {
        private CoinswaysDbEntities db = new CoinswaysDbEntities();

        // GET: /Admin/TransactionStatu/
        public ActionResult Index()
        {
            return View(db.TransactionStatus.ToList());
        }

        // GET: /Admin/TransactionStatu/Details/5
        public ActionResult Details(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            TransactionStatu transactionstatu = db.TransactionStatus.Find(id);
            if (transactionstatu == null)
            {
                return HttpNotFound();
            }
            return View(transactionstatu);
        }

        // GET: /Admin/TransactionStatu/Create
        public ActionResult Create()
        {
            return View();
        }

        // POST: /Admin/TransactionStatu/Create
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create([Bind(Include="ID,Details,IsActive")] TransactionStatu transactionstatu)
        {
            if (ModelState.IsValid)
            {
                db.TransactionStatus.Add(transactionstatu);
                db.SaveChanges();
                return RedirectToAction("Index");
            }

            return View(transactionstatu);
        }

        // GET: /Admin/TransactionStatu/Edit/5
        public ActionResult Edit(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            TransactionStatu transactionstatu = db.TransactionStatus.Find(id);
            if (transactionstatu == null)
            {
                return HttpNotFound();
            }
            return View(transactionstatu);
        }

        // POST: /Admin/TransactionStatu/Edit/5
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit([Bind(Include="ID,Details,IsActive")] TransactionStatu transactionstatu)
        {
            if (ModelState.IsValid)
            {
                db.Entry(transactionstatu).State = EntityState.Modified;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            return View(transactionstatu);
        }

        // GET: /Admin/TransactionStatu/Delete/5
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            TransactionStatu transactionstatu = db.TransactionStatus.Find(id);
            if (transactionstatu == null)
            {
                return HttpNotFound();
            }
            return View(transactionstatu);
        }

        // POST: /Admin/TransactionStatu/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirmed(int id)
        {
            TransactionStatu transactionstatu = db.TransactionStatus.Find(id);
            db.TransactionStatus.Remove(transactionstatu);
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
